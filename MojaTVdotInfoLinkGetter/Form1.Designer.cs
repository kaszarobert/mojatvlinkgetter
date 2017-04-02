namespace MojaTVdotInfoLinkGetter
{
    partial class Form1
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.betGetLinks = new System.Windows.Forms.Button();
            this.txtBemenet = new System.Windows.Forms.TextBox();
            this.txtKimenet = new System.Windows.Forms.TextBox();
            this.cbNoMojatv = new System.Windows.Forms.CheckBox();
            this.button1 = new System.Windows.Forms.Button();
            this.SuspendLayout();
            // 
            // betGetLinks
            // 
            this.betGetLinks.Location = new System.Drawing.Point(173, 179);
            this.betGetLinks.Name = "betGetLinks";
            this.betGetLinks.Size = new System.Drawing.Size(75, 59);
            this.betGetLinks.TabIndex = 0;
            this.betGetLinks.Text = "Get Links";
            this.betGetLinks.UseVisualStyleBackColor = true;
            this.betGetLinks.Click += new System.EventHandler(this.button1_Click);
            // 
            // txtBemenet
            // 
            this.txtBemenet.Location = new System.Drawing.Point(12, 12);
            this.txtBemenet.Multiline = true;
            this.txtBemenet.Name = "txtBemenet";
            this.txtBemenet.ScrollBars = System.Windows.Forms.ScrollBars.Both;
            this.txtBemenet.Size = new System.Drawing.Size(236, 150);
            this.txtBemenet.TabIndex = 1;
            this.txtBemenet.Text = "http://www.mojatv.info/listtv.php";
            // 
            // txtKimenet
            // 
            this.txtKimenet.Location = new System.Drawing.Point(269, 12);
            this.txtKimenet.Multiline = true;
            this.txtKimenet.Name = "txtKimenet";
            this.txtKimenet.ScrollBars = System.Windows.Forms.ScrollBars.Both;
            this.txtKimenet.Size = new System.Drawing.Size(252, 235);
            this.txtKimenet.TabIndex = 2;
            // 
            // cbNoMojatv
            // 
            this.cbNoMojatv.AutoSize = true;
            this.cbNoMojatv.Checked = true;
            this.cbNoMojatv.CheckState = System.Windows.Forms.CheckState.Checked;
            this.cbNoMojatv.Location = new System.Drawing.Point(12, 185);
            this.cbNoMojatv.Name = "cbNoMojatv";
            this.cbNoMojatv.Size = new System.Drawing.Size(140, 17);
            this.cbNoMojatv.TabIndex = 3;
            this.cbNoMojatv.Text = "Nem kell mojatv.info link";
            this.cbNoMojatv.UseVisualStyleBackColor = true;
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(12, 215);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(75, 23);
            this.button1.TabIndex = 4;
            this.button1.Text = "button1";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click_1);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(545, 261);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.cbNoMojatv);
            this.Controls.Add(this.txtKimenet);
            this.Controls.Add(this.txtBemenet);
            this.Controls.Add(this.betGetLinks);
            this.Name = "Form1";
            this.Text = "mojatv.info stream links getter";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button betGetLinks;
        private System.Windows.Forms.TextBox txtBemenet;
        private System.Windows.Forms.TextBox txtKimenet;
        private System.Windows.Forms.CheckBox cbNoMojatv;
        private System.Windows.Forms.Button button1;
    }
}

