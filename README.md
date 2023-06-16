# [Dashboard AdventureWorks](https://startbootstrap.com/theme/sb-admin-2/)

Kelompok 8:

1. Triyatul Dewi Safitri 21082010007
2. Rhohmah Indah Mekar Sari 21082010021
3. Gading Putri Diniarti 21082010028
4. Putri Dia Lestari 21082010035

Adventure Works merupakan salah satu sampel Online Transaction Processing (OLTP) database buatan Microsoft yang tersedia pada SQL Server 2005. Database Adventureworks didalamnya berisikan 70 tabel dengan berbagai macam data dari suatu perusahaan manufaktur fiktif yang bernama Adventureworks Cycles. Perusahaan tersebut merupakan perusahaan multinasional yang memproduksi sekaligus menjual sepeda beserta aksesorisnya.

## Download and Installation

Ikuti langkah-langkah ini untuk proses instalasi :

1. Install database server: MySql (disini kami menggunakan XAMPP versi terbaru).
2. Pastikan sudah install [mondrian] dengan cara mengaktifkan tomcat pada XAMPP dan tempatkan file tersebut pada `C:\Xampp\tomcat\webapps`, setelah itu matikan tomcat dan hapus kembali file `mondrian.war`.
3. Pastikan Di dalam library mondrian sudah terinstall [mysql connector](https://ilmu.upnjatim.ac.id/mod/resource/view.php?id=150007) dengan cara menempatkannya pada `C:\Xampp\tomcat\webapps\mondrian\WEB-INF\lib`.
4. Extract `FP_DWO_KELOMPOK_8_2023.zip` pada folder htdocs XAMPP (xampp/htdocs).
5. Jalankan Xampp control panel.
6. Start apache ,mysql server, dan Tomcat.
7. Buka phpMyAdmin (localhost/phpmyadmin).
8. Buat database dengan nama uas_kelompok8.
9. Import file `uas_kelompok8.sql` ke dalam database uas_kelompok8.
10. Pindahkan isi pada folder `Mondrian OLAP` ke dalam folder server Tomcat bawaan dari XAMPP `C:\xampp\tomcat\webapps\mondrian` - Pilih Replace File. Kemudian file dengan awalan bernama `purchasing` dan `production` pindahkan menuju `C:\xampp\tomcat\webapps\mondrian\WEB-INF\queries`
11. Jalankan aplikasi dengan mengakses http://localhost/FP_DWO_KELOMPOK_8_2023
