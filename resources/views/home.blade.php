<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active btn" aria-current="page" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
