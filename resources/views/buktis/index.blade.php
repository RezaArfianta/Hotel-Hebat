<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/ui/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/ui/vendors/linericon/style.css">
        <link rel="stylesheet" href="/assets/ui/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/assets/ui/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="/assets/ui/vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="/assets/ui/css/style.css">
        <link rel="stylesheet" href="/assets/ui/css/responsive.css">
    <title>Our Hotel</title>
</head>
<body>
<section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Bukti</h2>
                    <p>Info Struk pemesanan hotel kami</p>
                </div>
                        <div class="accomodation_item text-center">
                        @foreach ($buktis as $bukti)
                        <table align="center">
                        <h4 class="title_color">Bukti Pemesanan</h2>
                        <tr>
                            <td width="130px">Nama Pemesan </td>
                            <td width="20px"> : </td>
                            <td> {{ $bukti->nama_pemesan }}</td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td> : </td>
                            <td> {{ $bukti->email }}</td>
                        </tr>
                        <tr>
                            <td>No HP </td>
                            <td> : </td>
                            <td> {{ $bukti->no_hp }}</td>
                        </tr>
                        <tr>
                            <td>Tipe Kamar </td>
                            <td> : </td>
                            <td> {{ $bukti->tipe_kamar }}</td>
                        </table>
                        </br>
                        <table align="center">
                            <h4 class="title_color">Tamu</h4>
                        <tr>
                            <td width="130px">Nama Tamu </td>
                            <td width="20px"> : </td>
                            <td> {{ $bukti->nama_tamu }}</td>
                        </tr>
                        </table>
                        </br>
                        <table align="center" border="1px solid black">
                            <h4 class="title_color">Data Reservasi</h4>
                            Tanggal : {{ $bukti->created_at }}
                        <tr>
                            <th>Tipe Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>Tanggal Check In</th>
                            <th>Tanggal Check Out</th>
                        </tr>
                        <tr>
                            <td width="150px">{{ $bukti->tipe_kamar }}</td>
                            <td width="150px">{{ $bukti->jumlah_kamar }}</td>
                            <td width="150px">{{ $bukti->tgl_checkin }}</td>
                            <td width="150px">{{ $bukti->tgl_checkout }}</td>
                        </table>
                        <br></br>
        <a class="btn btn-primary" href="{{ url('/') }}" style="margin-right:10px;">Continue</a>
        @endforeach
</body>
</html>