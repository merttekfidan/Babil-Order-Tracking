var topSiparis = document.getElementById("topSiparis").children[0].innerHTML;
var tamamlananSiparis = document.getElementById("tamamlananSiparis").children[0].innerHTML;
var iadeSiparis = document.getElementById("iadeSiparis").children[0].innerHTML;
var iptalSiparis = document.getElementById("iptalSiparis").children[0].innerHTML;
Morris.Donut({
element: 'donut-example',
data: [
  {label: "Toplam Sipariş", value: topSiparis},
  {label: "Tamamlanan Sipariş", value: tamamlananSiparis},
  {label: "İade Sipariş", value: iadeSiparis},
  {label: "İptal Sipariş", value: iptalSiparis}
],
backgroundColor: '#ccc',
colors: [
  '#6FD088',
  '#ED4F84',
  '#4C83FB',
  '#000'
]
});
