##Tutorial GitHub

**DAFTAR GITHUB**

\- Link : [[https://github.com/]](https://github.com/)

\- Daftar seperti biasa

**INSTALL GIT DI WINDOWS**

-   silahkan install dlu git di windows Link :
    > [[https://git-scm.com/download/win]](https://git-scm.com/download/win)
    > (pilih yg setup 64/32)

-   install seperti biasa

-   kalau berhasil klik kanan di desktop dan muncul **GIT BASH HERE**

> ![](image/image11.png){width="2.166778215223097in"
> height="2.833478783902012in"}

**\# Repository Tugas Praktikum Pengantar Pemrograman 2022**

**\## Alur pengumpulan tugas ke repositori ini**

Catatan: di bawah ini SS saat saya coba kumpul tugas di repository
LABPP_2022_5 , **karena kalian kelompok 7 jadi kumpul tugas nya di
repository LAB-WEB-7-2023**

1.  **Fork repositori ini
    > [[https://github.com/Muhammadrizuki/LAB-WEB-7-2023]](https://github.com/Muhammadrizuki/LAB-WEB-7-2023)**

-   Klik fork di kanan atas

![](image/image3.png){width="6.268055555555556in"
height="2.2819444444444446in"}

-   Setelah itu klik create fork

![](image/image10.png){width="6.268055555555556in"
height="2.5555555555555554in"}

2.  **CLONE** repository hasil **fork** anda

-   klik kanan di desktop trus pilih GIT BASH HERE

![](image/image11.png){width="2.166778215223097in"
height="2.833478783902012in"}

**git clone
[[https://github.com/YOUR_USERNAME/LABPP_2022_5.git]{.underline}](https://github.com/YOUR_USERNAME/LABPP_2022_5.git)**

![](image/image6.png){width="6.268055555555556in"
height="1.7236111111111112in"}

-   Klo sukses ntar ada folder baru sesuai nama repo yg di bikin tadi

-   kalau sudah ada keterangan done seperti SS di atas artinya sudah
    berhasil clone

-   Kemudian lihat desktop ( tampilan layar utama pada sistem operasi
    windows) nanti otomatis ada folder yang namanya sesuai repo tdi

> ![](image/image27.png){width="2.4479166666666665in"
> height="3.0729166666666665in"}

-   Skrng coba buka isi folder nya dan buat folder baru pake NIM anda

![](image/image12.png){width="6.268055555555556in"
height="2.316666666666667in"}

Setelah itu buka foldernya dan bkin lagi folder baru dengan nama
praktikum

![](image/image2.png){width="6.268055555555556in"
height="1.9333333333333333in"}

-   Lanjut coba buat file baru di dalam folder praktikum 1 tdi misal
    test.txt trus isi file nya bebas

![](image/image20.png){width="6.268055555555556in" height="2.18125in"}

-   Klo udah, dari terminal yg tadi kita masuk ke foldernya ketik cd
    nama folder

![](image/image14.png){width="4.73635498687664in"
height="0.9444925634295713in"}

**PUSH FILE**

Pilih-pilih folder/file yang mau diupload

-   " git add . " =\> semua file baru/ yang ada perubahannya dalam
    folder yang skrng bakal di push

-   " git add tes.txt " =\> kalo mau upload file secara spesifik

Contoh

![](image/image17.png){width="4.729409448818898in"
height="0.7708727034120735in"}

Artinya Semua file di folder tersebut bakal di push

Lakukan commit tiap kali nge-push (NB: commit artinya buat keterangan
kita push apa )

-   " git commit -m '(isi kommitnya)' "

Contoh :

-   " git commit -m "latihan" "

![](image/image16.png){width="4.937753718285214in"
height="1.0833891076115485in"}

-   git push =\> fungsinya untuk upload ke git

![](image/image21.png){width="4.396059711286089in"
height="0.4375229658792651in"}

-   Akan muncul perintah untuk login , masukkan usernamenya kalian dan
    untuk password itu isinya adalah token

![](image/image15.png){width="4.132156605424322in"
height="4.277997594050744in"}

-   Untuk dapatkan token, klik profil 🡪 klik settings

![](image/image19.png){width="2.007047244094488in"
height="4.11132217847769in"}

-   Terus scrool ke bawah klik developer settings

![](image/image26.png){width="2.1737226596675416in"
height="4.048818897637795in"}

-   Klik bagian personal akses tokens dan generate new token

![](image/image29.png){width="6.268055555555556in"
height="1.1291666666666667in"}

-   Pilih yang no expiration, supaya tiap mau uplod file tidak perlu
    login ulang lagi

![](image/image23.png){width="5.423889982502187in"
height="3.4237871828521436in"}

-   Centang repo

![](image/image24.png){width="6.1322594050743655in"
height="3.215442913385827in"}

-   Scrool ke bawah dan klik generate token

![](image/image25.png){width="6.268055555555556in"
height="3.3569444444444443in"}

-   Copy tokennya untuk dimasukkan nanti dibagian password

![](image/image28.png){width="6.268055555555556in"
height="2.5069444444444446in"}

-   Kembali ke yang tadi disuruh login, paste token nya ke dalam
    password

![](image/image18.png){width="4.090487751531058in"
height="4.319666447944007in"}

-   Isi usernamenya sesuai dgn yang ada di git , ini usernamenya sama ji
    kyak tdi

![](image/image13.png){width="3.6321314523184602in"
height="1.6320286526684165in"}

-   Tokennya juga sama kyk tdi paste ke password

![](image/image4.png){width="3.583517060367454in"
height="1.5625798337707786in"}

-   Setelah berhasil coba buka kembali cmd nya, kalau berhasil muncul
    seperti di bawah ini, 100%

![](image/image1.png){width="5.507227690288714in"
height="1.8612062554680664in"}

-   Setelah di git push itu artinya sudah terkirim ke github, sekarang
    kembali ke halaman github, terus klik pull request

![](image/image8.png){width="6.268055555555556in"
height="1.992361111111111in"}

-   Klik yang di sebelah kanan, new pull request

![](image/image5.png){width="6.268055555555556in"
height="1.854861111111111in"}

-   Lanjut, klik lagi create pull request

![](image/image9.png){width="6.268055555555556in"
height="2.723611111111111in"}

-   Lanjut, klik lagi create pull request. Jika mau tambahkan coment
    bisa juga

![](image/image7.png){width="6.268055555555556in"
height="3.446527777777778in"}

-   Nah kalau sudah selesai akan muncul tampilan seperti di bawah,
    artinya sudah di serahkan tinggal tunggu untuk saya nilai dan acc

![](image/image22.png){width="6.268055555555556in"
height="3.9305555555555554in"}

**\## Hal-hal yang harus diperhatikan**

\- \[x\] Cara mengumpulkan tugas sesuai dengan aturan diatas.

\- \[x\] \_\*\*Satu Praktikum, Satu Folder\*\*\_.

\- \[x\] \_\*\*Satu Soal, Satu Class\*\*\_.

\- \[x\] \_\*\*Program Berjalan dengan Baik dan Benar Berdasarkan
Ketentuan Tugas\*\*\_.

Kalau ada error atau ada yang mau ditanyakan silahkan hubungi WA ku,
wa.me/+6282191862002 (Awang)
