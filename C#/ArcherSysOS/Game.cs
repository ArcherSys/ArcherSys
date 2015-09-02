using System;
using System.Drawing;
using System.Diagnostics;
using System.Windows;
using System.Windows.Forms;
using ArcherSysOS;
namespace ArcherSysOS.GameDevelopment {
    public class Game
    {
        public Graphics p_device;
        public Bitmap p_surface;
        public PictureBox p_pb;
        public Form p_frm;

        public Game(Form form, int width, int height)
        {
            p_frm = form;
            p_frm.FormBorderStyle = FormBorderStyle.FixedSingle;
            p_frm.MaximizeBox = false;
            p_frm.Size = new Size(width, height);
            p_pb = new PictureBox();
            p_pb.Parent = p_frm;
            p_pb.Dock = DockStyle.Fill;
            p_pb.BackColor = ConsoleColor.Black;
            p_surface = BitmapManager.loadBitmap(p_frm.Size.Width, p_frm.Size.Height);
            p_pb.Image = p_surface;
            p_device = Graphics.fromImage(p_surface);
        }
    }