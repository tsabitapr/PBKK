using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace PhotoLab
{
    public class Product
    {
        public string Name { get; set; }
        public string Desc { get; set; }
        public string Loc { get; set; }
        public string Image { get; set; }  

        public Product(string name, string desc, string loc, string image) 
        { 
            Name = name;
            Desc = desc;
            Loc = loc;
            Image = image;
        }
    }
}
