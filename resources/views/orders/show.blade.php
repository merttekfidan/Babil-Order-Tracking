<html>

<table border="1" width='380px' height='450px'>
  <tr >
    <td colspan="2"><h2><center>MDF TABLO TASARIM</h2></td>
  </tr>
  <tr>
    <td colspan="2">Whatsapp : +90 (555) 003 75 87</td>
  </tr>
  <tr>
    <td><b>Ödeme Şekli</b></td>
    <td>{{$orders->payment_on_door=='1' ? 'G.Ö.' : 'Ü.A.'}}</td>
  </tr>

  <tr>
    <td><b>Fiyat:</b></td>
    <td>{{$orders->price}} TL  ({{$orders->payment_methods->method_name}})</td>
  </tr>
  <tr>
    <td><b>Tarih: </b></td>
    <td>{{ date('d-m-Y', strtotime($orders->created_at)) }}</td>
  </tr>
  <tr>
    <td><b>Ad-Soyad:</b></td>
    <td>{{$orders->name}} {{$orders->surname}}</td>
  </tr>
  <tr>
    <td><b>Telefon:</b></td>
    <td>{{$orders->phone_number}}</</td>
  </tr>
  <tr>
    <td><b>Adres:</b></td>
    <td><b>{{$orders->address}}</b></td>
  </tr>
  <tr>
    <td><b>NOT:</b></td>
    <td><b>{{$orders->control_allowed==1 ? 'Kontrollü kargo' : ''}}</b></td>
  </tr>
  <tr>
    <td><b>Ürün:</b></td>
    <td>{{$orders->product_code}}</td>
  </tr>
  <script type="text/javascript">
  <!--
  window.print();
  window.close();
  //-->
  </script>

</table>
</html>
