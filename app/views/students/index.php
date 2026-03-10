<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<!-- Header -->
<body class="min-h-screen flex flex-col bg-gray-100">
    <header class="bg-blue-500 text-white">
        <div class="flex justify-between container mx-auto p-4">
            <a href="/students" class="font-bold text-xl">Sistem Sekolah </a>
            <a href="/students/create" class="bg-white text-blue-500 px-4 py-2 rounded-lg">+ Tambah Siswa</a>
        </div>
    </header>
    <!--Main-->
    <main class="bg-gray-100 grow container mx-auto ">
        <div class="at-8">

        </div>
        <div>
                  <!--Card Header-->
                  <div class="bg-white shadow rounded-lg p-4">
                    <h1 class="text-xl font-bold">Daftar Siswa</h1>
                    <p>Menampilkan daftar Siswa yang terdaftar</p>
                  </div>
        </div>
<!--Card Header End-->
<!--Card Content-->
<div class="bg-white shadow rounded-lg">

</div>
    </main>
<!-- Footer -->
    <footer class="bg-gray-800 text-white">
            <div class="text-center p-4">
                &copy <?= date("Y")?> - Sistem Sekolah SMK KRISTEN IMMANUEL
            </div>
    </footer>
    <!-- The End Of Footer -->
    
</body>

</html>