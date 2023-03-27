@extends('layouts.main')


@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat datang {{ $user }}</h1>
        <p class="col-md-8 fs-4">Slahkan login untuk dapat mengakses layanan kami</p>
        <a href="/login" class="btn btn-primary btn-lg" type="button">Login</a>
    </div>
    <div>
        <h2>Info data {{ $user }}</h2>
        <table class="table">
            <tbody>
                <tr>
                    <td>Username</td>
                    <td>{{ $user }}</td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>{{ $usia }}</td>
                </tr>

                <tr>
                    <td>Kategori Usia</td>
                    <td>
                        @if ($usia >= 21)
                            Dewasa
                        @elseif ($usia >= 13)
                            Remaja
                        @else
                            Anak-anak
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>{{ $grade }}</td>
                </tr>
                <tr>
                    <td>Nilai Mutu</td>
                    <td>
                        @switch($grade)
                            @case($grade >= 90)
                                A
                            @break

                            @case($grade >= 80)
                                B
                            @break

                            @default
                                C
                        @endswitch
                    </td>
                </tr>

                <tr>
                    <td>Status</td>
                    <td>
                        @if ($isMember)
                            Member
                        @else
                            Bukan Member
                        @endif
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div>
        Contoh Conditional Classes
        @php
            $isActive = false;
            $hasError = true;
        @endphp

        <span @class([
            'p-4',
            'font-bold' => $isActive,
            'text-gray-500' => !$isActive,
            'bg-red' => $hasError,
        ])>Member</span>

        <span class="p-4 text-gray-500 bg-red">Member</span>

    </div>
    <div>
        <p>Contoh Iterasi</p>
        @for ($i = 0; $i < 10; $i++)
            Data ke-{{ $i }}
        @endfor
    </div>
    <div class="mt-4">
        <h1>Data Nilai Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_mahasiswa as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data['nama'] }}</td>
                        <td>{{ $data['nim'] }}</td>
                        <td>{{ $data['nilai'] }}</td>
                        <td>
                            @switch( $nilai = $data['nilai'])
                                @case($nilai >= 90 )
                                    A
                                    @break
                                @case($nilai>= 80)
                                    B
                                    @break
                                @default
                                    C                                        
                            @endswitch
                            
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="/detail/{{$data['id']}}">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

   