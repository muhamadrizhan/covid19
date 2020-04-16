@extends('layouts.template')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{url('survey.store')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                       <h3 align="center">DAFTAR PERTANYAAN</h3>
                                       <h3 align="center">PENILAIAN RESIKO PRIBADI TERKAIT COVID 19</h3>
                                    <div class="panel-body">
                                        <table class="table table-hover" id="datatables">
                                            <thead align="center">
                                                <tr>
                                                    <th width="1">No</th>
                                                    <th>Kegiatan</th>
                                                    <th width="15%">Ya/Tidak</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                   <td style="vertical-align:middle">1</td>
                                                   <td style="vertical-align:middle">Saya pergi keluar rumah</td>
                                                   <td>
                                                        <div style="display:inline-block">
                                                            <input type="radio" id="q1" name="y1" value="1">
                                                            <label for="y1">Ya</label>
                                                            <input type="radio" id="q1" name="n1" value="1">
                                                            <label for="n1">Tidak</label>
                                                        </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                    <td style="vertical-align:middle">2</td>
                                                    <td style="vertical-align:middle">Saya Menggunakan Transportasi umum</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q2" name="y2" value="1">
                                                             <label for="y2">Ya</label>
                                                             <input type="radio" id="q2" name="n2" value="1">
                                                             <label for="n2">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">3</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q3" name="y3" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q3" name="n3" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">4</td>
                                                    <td style="vertical-align:middle">Saya berjabat dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q4" name="y4" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q4" name="n4" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">5</td>
                                                    <td style="vertical-align:middle">Saya tidak membersihkan tangan dengan hand sanitizer</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q5" name="y5" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q5" name="n5" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">6</td>
                                                    <td style="vertical-align:middle">Saya menyentuh benda/uang juga yang disentuh oleh orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q6" name="y6" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q6" name="n6" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">7</td>
                                                    <td style="vertical-align:middle">Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q7" name="y7" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q7" name="n7" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">8</td>
                                                    <td style="vertical-align:middle">Saya makan diluar rumah (warung/restaurant)</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q8" name="y8" value="1">
                                                             <label for="y8">Ya</label>
                                                             <input type="radio" id="q8" name="n8" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">9</td>
                                                    <td style="vertical-align:middle">Saya tidak minum & cuci tangan dengan sabun setelah tiba di tujuan</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q9" name="y9" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q9" name="n9" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">10</td>
                                                    <td style="vertical-align:middle">Saya berada di wilayah keluharan tempat pasien tertular</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q10" name="y10" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q10" name="n10" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">11</td>
                                                    <td style="vertical-align:middle">Saya tidak pasang hand sanitizer di depan pintuk masuk, untuk bersihkan tangan sebelum pegang gagang pintu</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q11" name="y11" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q11" name="n11" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">12</td>
                                                    <td style="vertical-align:middle">Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q12" name="y12" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q12" name="n12" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">13</td>
                                                    <td style="vertical-align:middle">Saya tidak menyediakan : tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga di rumah</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q13" name="y13" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q13" name="n13" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">14</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q14" name="y14" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q14" name="n14" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">15</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q15" name="y15" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q15" name="n15" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">16</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q16" name="y16" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q16" name="n16" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">17</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q17" name="y17" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q17" name="n17" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">18</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q18" name="y18" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q18" name="n18" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">19</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q19" name="y19" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q19" name="n19" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">20</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q20" name="y20" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q20" name="n20" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align:middle">21</td>
                                                    <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                                                    <td>
                                                         <div style="display:inline-block">
                                                             <input type="radio" id="q21" name="y21" value="1">
                                                             <label for="y3">Ya</label>
                                                             <input type="radio" id="q21" name="n21" value="1">
                                                             <label for="n3">Tidak</label>
                                                         </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
