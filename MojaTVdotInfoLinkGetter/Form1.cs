using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net;
using System.IO;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Diagnostics;

namespace MojaTVdotInfoLinkGetter
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            Stopwatch stopwatch = new Stopwatch();
            stopwatch.Start();

            try
            {
                /**
                 * WebClient class inherits IDisposable
                 * 
                 * client.DownloadFile("http://yoursite.com/page.html", @"C:\localfile.html");
                 *  Or you can get the file content without saving it:
                 *  string htmlCode = client.DownloadString("http://yoursite.com/page.html");
                 **/

                WebClient client = new WebClient();
                txtKimenet.Text = ($"{DateTime.Now} TV-k listájának betöltése....\r\n");
                //string htmlCode = File.ReadAllText("a.html");                          //local file for testing
                foreach (var item in txtBemenet.Lines)
                {
                    if (item.Contains("mojatv.info"))
                    {
                        getMojaTvInfoLinks(item, stopwatch);
                    }
                    else if (item.Contains("livestreamlinks.net"))
                    {
                        getLiveStreamLinksDotNetInfoLinks(item, stopwatch);
                    }
                }

                //

                



            }
            catch (Exception)
            {

                throw;
            }
            finally
            {
                stopwatch.Stop();
                txtKimenet.AppendText($"\r\n   A folyamat {stopwatch.Elapsed.TotalSeconds} másodperc alatt befejeződött.\r\n");
            }

        }

        private void getMojaTvInfoLinks(string url, Stopwatch stopwatch)
        {
            List<TVStream> myTvList = new List<TVStream>();

            using (WebClient client = new WebClient())
            {
                string htmlCode = client.DownloadString(url);
                txtKimenet.AppendText($"{DateTime.Now} TV lista kész.\r\n");
                txtKimenet.AppendText($"{DateTime.Now} TV-k URL-jeinek kiderítése....\r\n");
                string[] htmlSplittedCode = htmlCode.Split(new char[] { ' ', '<', '>' });

                var newTvListItem = new TVStream();

                for (int i = 0; i < htmlSplittedCode.Length; i++)
                {
                    if (htmlSplittedCode[i].Length == 0)
                    {
                        continue;
                    }

                    if (htmlSplittedCode[i].IndexOf("href") == 0)
                    {
                        // here is the URL of the stream
                        newTvListItem.Href =
                            htmlSplittedCode[i].Split('"')[1].Remove(0, 1).Insert(0, @"http://www.mojatv.info");
                    }
                    else if (htmlSplittedCode[i].IndexOf("src") == 0)
                    {
                        // here is the tv image url
                        newTvListItem.ImgSrc =
                            htmlSplittedCode[i].Split('"')[1].Remove(0, 1).Insert(0, @"http://www.mojatv.info");
                    }
                    else if (htmlSplittedCode[i].IndexOf("small") == 0)
                    {
                        // here is the TV's name written
                        i += 1;
                        var tmp = htmlSplittedCode[i];
                        i += 1;
                        while (htmlSplittedCode[i].IndexOf("br") != 0 && htmlSplittedCode[i + 1] != "/")
                        {
                            tmp += " " + htmlSplittedCode[i];
                            i += 1;
                        }

                        newTvListItem.Name = tmp;

                        myTvList.Add(newTvListItem);
                        newTvListItem = new TVStream();
                    }
                }

                txtKimenet.AppendText($"{DateTime.Now} TV-k URL-jei megvannak!\r\n");

                //TODO EPG ID


                // download each and every HTML page and get the correct M3u8 stream links
                var tvIndexInList = 0;

                for (tvIndexInList = 0; tvIndexInList < myTvList.Count;)
                {
                    txtKimenet.AppendText($"{DateTime.Now} {tvIndexInList + 1}. stream URL-jének kiderítése....\r\n");
                    //string pageHtml = File.ReadAllText("tv.php"); //                 local file for testing
                    string pageHtml = client.DownloadString(myTvList[tvIndexInList].Href);
                    string[] pageHtmlCode = pageHtml.Split('\n');

                    foreach (var item in pageHtmlCode)
                    {
                        if (item.IndexOf("src:") > -1)
                        {
                            myTvList[tvIndexInList].Href = item.Split('"')[1];
                            tvIndexInList += 1;
                            break;
                        }

                    }

                    txtKimenet.AppendText($"{DateTime.Now} {tvIndexInList}. stream URL-je megvan.\r\n");

                }


                txtKimenet.AppendText($"{DateTime.Now} Az m3u8 lista megvan {stopwatch.Elapsed.TotalSeconds} másodperc alatt! Jöhet a fájlbaírás.\r\n");

                //if we don't want mojatv.info links then we have to remove it before saving the m3u8 list
                if (cbNoMojatv.Checked)
                {
                    txtKimenet.AppendText($"{DateTime.Now} www.mojatv.info linkek kiszűrése...\r\n");
                    removeMojaTvInfoLinksFromM3UList(myTvList);
                    txtKimenet.AppendText($"{DateTime.Now} www.mojatv.info linkek kiszűrve.\r\n");
                }

                // now we have to write the output
                SaveFileDialog sfd = new SaveFileDialog();
                sfd.FileName = $"mojaTvInfo_{DateTime.Now.Year}{DateTime.Now.Month.ToString("D2")}{DateTime.Now.Day.ToString("D2")}_{DateTime.Now.Hour.ToString("D2")}{DateTime.Now.Minute.ToString("D2")}{DateTime.Now.Second.ToString("D2")}.m3u8";
                var dr = sfd.ShowDialog();

                if (dr == DialogResult.OK)
                {
                    try
                    {
                        txtKimenet.AppendText($"{DateTime.Now} Fájlba írás megkezdődött.\r\n");
                        File.WriteAllText(sfd.FileName, exportM3U(myTvList));
                        txtKimenet.AppendText($"{DateTime.Now} Az m3u8 fájl lemezre írva. Folyamat vége.\r\n");

                    }
                    catch (Exception exc)
                    {
                        txtKimenet.AppendText($"{DateTime.Now} Hiba történt: {exc.Message}.\r\n");
                    }

                }

            }
        }

        private void getLiveStreamLinksDotNetInfoLinks(string url, Stopwatch stopwatch)
        {

        }

        private string exportM3U(List<TVStream> tvList)
        {
            string output = "#EXTM3U";

            foreach (var item in tvList)
            {
                output += (!String.IsNullOrEmpty(item.TvgId)) ?  
                    $"\r\n#EXTINF:-1 tvg-id=\"{item.TvgId}\" tvg-logo=\"{item.ImgSrc}\", {item.Name}\r\n{item.Href}"
                    : $"\r\n#EXTINF:-1 tvg-logo=\"{item.ImgSrc}\", {item.Name}\r\n{item.Href}";
            }

            return output + "\r\n";
        }

        private void removeMojaTvInfoLinksFromM3UList(List<TVStream> tvList)
        {
            for (int i = tvList.Count-1; i >= 0 ; i--)
            {
                if (tvList[i].Href.Contains("mojatv.info/live"))
                {
                    tvList.RemoveAt(i);
                }
            }
        }
    }
}
