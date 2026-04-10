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
    <?php
    require_once '../app/views/layouts/partials/header.php'
    ?>
    <!--Main-->
    <main class="bg-gray-100 grow container mx-auto ">
            <!--Card Header-->
            <div class="bg-white shadow rounded-lg p-4">
                <h1 class="text-xl font-bold">Daftar Siswa</h1>
                <p>Menampilkan daftar Siswa yang terdaftar</p>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <table class="w-full">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 text-left">Nomor</th>
                            <th class="py-2 px-4 text-left">Nama</th>
                            <th class="py-2 px-4 text-left">Nis</th>
                            <th class="py-2 px-4 text-left">Kelas</th>
                            <th class="py-2 px-4 text-left">Nomor telepon</th>
                            <th class="py-2 px-4 ">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 text-left">1</td>
                            <td class="py-2 px-4 text-left">Pokemon</td>
                            <td class="py-2 px-4 text-left">1234</td>
                            <td class="py-2 px-4 text-left">XITKJ3</td>
                            <td class="py-2 px-4 text-left">0812345678</td>
                            <td class="py-2 px-4 text-left">
                                <div class="flex items-center justify-center gap-4">
                                            <a href="/students/1" class="text-green-500">Detail</a>
                                            <a href="/students/1/edit" class="text-yellow-500">Edit</a>
                                            <a href="" class="text-red-500">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<!--Card Header End-->
<!--Card Content-->
<div class="bg-white shadow rounded-lg">

</div>
    </main>
<!-- Footer -->
   <?php
    require_once '../app/views/layouts/partials/footer.php'
    ?>
    <!-- The End Of Footer -->
    
</body>

</html>