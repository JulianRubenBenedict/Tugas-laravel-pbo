@extends('layout.base')

@section('title', 'Profile')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1>Profile <span class="badge badge-secondary">Data Diri</span></h1><br>
    <div class="jumbotron jumbotron-fluid p-3 mb-2 bg-dark text-white rounded-top">
      <div class="container">
        <h1 class="text-center display-4">Julian Ruben Benedict</h1><br>
        <div class="text-center">
          <img src="{{URL ::to('/assets/foto.jpg')}}" class="border border-primary rounded" width="175px">
        </div><br>
        <p class="lead">Perkenalkan nama saya Ruben, saya bersekolah di SMK Taruna Bhakti Depok. 
        Saya sekarang berada di kelas XII dan tepatnya di Jurusan Rekayasa Perangkat Lunak (RPL). 
        Saya lahir pada 27 juli 2002, saat ini umur saya masih 17 tahun </p>
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid p-3 mb-2 bg-dark text-white rounded-bottom">
      <table align="center">
        <tr>
          <td align="center">
            <div class="card p-3 mb-2 bg-dark text-white"  style="width: 18rem;">
              <div class="text-center">
              <img class='gambwar' src="{{URL ::to('/assets/instagram.png')}}" width="100px">
              </div>
              <div class="card-body">
                <h5 class="card-title">Instagram</h5>
                <p class="card-text">@ruben.bz_</p>
                <a href="https://www.instagram.com/ruben.bz_/" class="btn btn-primary">Link Instagram</a>
              </div>
            </div>  
          </td>
          <td align="center">
            <div class="card p-3 mb-2 bg-dark text-white"  style="width: 18rem;">
              <div class="text-center">
              <img align="center" src="{{URL ::to('/assets/twitter.png')}}" width="100px">
              </div>
              <div class="card-body">
                <h5 class="card-title">Twitter</h5>
                <p class="card-text">@RubenBenedict2</p>
                <a href="https://twitter.com/RubenBenedict2" class="btn btn-primary">Link Twitter</a>
              </div>
            </div>
          </td>
          <td align="center">
            <div class="card p-3 mb-2 bg-dark text-white"  style="width: 18rem;">
              <div class="text-center">
              <img align="center" src="{{URL ::to('/assets/github.png')}}" width="100px">
              </div>
              <div class="card-body">
                <h5 class="card-title">Github</h5>
                <p class="card-text">Julian Ruben Benedict</p>
                <a href="https://github.com/JulianRubenBenedict" class="btn btn-primary">Link Github</a>
              </div>
            </div>
          </td>
        </tr>
      </table>
    </div>
    </div>
  </div>
</div>
@endsection
