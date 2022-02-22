<table id="example-3" class="display min-w850">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>NIK</th>
                  <th>Nama Anak</th>
                  <th>Usia</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>NTOB</th>
                  <th>Imunisasi</th>
                  <th>Ket</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($laporan as $kehadiran)
                <tr>
                  <td>{{$kehadiran->tanggal}}</td>
                  <td>{{$kehadiran->nik}}</td>
                  <td>{{$kehadiran->nama_lengkap}}</td>
                  <td>{{$kehadiran->usia}}</td>
                  <td>{{$kehadiran->tinggi}}</td>
                  <td>{{$kehadiran->berat}}</td>
                  <td>{{$kehadiran->ntob}}</td>
                  <td>{{$kehadiran->imunisasi}}</td>
                  <td>{{$kehadiran->keterangan}}</td>					
                </tr>
              @endforeach
              </tbody>
            </table>