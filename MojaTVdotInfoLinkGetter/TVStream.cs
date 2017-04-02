using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace MojaTVdotInfoLinkGetter
{
    public class TVStream
    {
        public string Name { get; set; }
        public string ImgSrc { get; set; }
        public string Href { get; set; }
        public string TvgId { get; set; }

        public TVStream()
        {
            Name = ImgSrc = Href = TvgId = "";
        }
        
    }
}
