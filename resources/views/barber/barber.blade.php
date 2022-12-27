@extends('layouts.header-barber')

@section('content')

<section class="about-us text-center mt-5 mb-5">
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Customer</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Tanggal Book</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark Otto</td>
                <td>Malang</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob Cowel</td>
                <td>Pandaan</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jonas Tow</td>
                <td>Pandaan</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jonas Tow</td>
                <td>Pandaan</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jonas Tow</td>
                <td>Pandaan</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Jonas Tow</td>
                <td>Pandaan</td>
                <td>21-12-2023</td>
                <td>
                    <button type="button" class="btn btn-primary">Terima</button>
                    <button type="button" class="btn btn-danger">Tolak</button>
                </td>
              </tr>
            </tbody>
          </table>
    </div>
</section>
@endsection