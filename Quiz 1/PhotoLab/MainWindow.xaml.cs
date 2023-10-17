using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace PhotoLab
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            var products = GetProducts();
            if (products.Count > 0)
                ListViewProducts.ItemsSource = products;
        }

        private List<Product> GetProducts()
        {
            return new List<Product>()
            {
                new Product("Temple", "Borobudur", "East Java", "/Assets/borobudur.jpg"),
                new Product("Mount Bromo", "Bromo", "East Java", "/Assets/bromo.jpg"),
                new Product("Bunaken Island", "Bunaken", "North Sulawesi", "/Assets/Bunaken.jpg"),
                new Product("Derawan Island", "Derawan", "East Kalimantan", "/Assets/derawan.jpg"),
                new Product("Gili Trawangan Island", "Gili Trawangan", "West Nusa Tenggara", "/Assets/gili trawangan.jpg"),
                new Product("Mount Ijen", "Ijen", "East Java", "/Assets/ijen.jpg"),
                new Product("Komodo Island", "Komodo", "East Nusa Tenggara", "/Assets/komodo.jpg"),
                new Product("Mandalika Beach", "Mandalika", "West Nusa Tenggara", "/Assets/mandalika.jpg"),
                new Product("Sianok Canyon", "Ngarai Sianok", "West Sumatra", "/Assets/ngarai sianok.jpeg"),
                new Product("Raja Ampat Islands", "Raja Ampat", "West Papua", "/Assets/raja ampat.jpg"),
                new Product("Mount Rinjani", "Rinjani", "West Nusa Tenggara", "/Assets/rinjani.jpg"),
                new Product("Lake Toba", "Toba", "North Sumatra", "/Assets/toba.jpg"),
                new Product("Wakatobi National Park", "Wakatobi", "Southeast Sulawesi", "/Assets/wakatobi.jpg"),
                new Product("Warinding Beach", "Warinding", "Papua", "/Assets/warinding.jpeg")
            };
        }
    }
}
