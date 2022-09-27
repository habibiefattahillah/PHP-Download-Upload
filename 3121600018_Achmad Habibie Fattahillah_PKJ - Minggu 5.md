# VLAN DAN ROUTER ON STICK

## 1. Topologi Jaringan

<img src="asset/prak5/1.png">

## 2. Konfigurasi
- Konfigurasi IP Di PC-1
<img src="../assets/prak5-2.png">

- Konfigurasi IP Di PC-2
<img src="../assets/prak5-3.png">

- Hidupkan interface Gig0/0/0 pada MAIN_ROUTER
<img src="../assets/prak5-4.png">

- Konfigurasikan Router On Stick pada MAIN_ROUTER
<img src="../assets/prak5-5.png">
</br>
Membuat sub interface dari Gig0/0/0.10 untuk default gateway vlan 10 dan membuat sub interface dari Gig0/0/0.30 untuk default gateway vlan 30

- Konfigurasikan Vlan 10 dan Vlan 30 pada MAIN_SW
<img src="../assets/prak5-6.png">

- Mengecheck daftar vlan pada MAIN_SW
<img src="../assets/prak5-7.png">
</br>
Terlihat vlan 10 dan vlan 30 telah terdaftar pada list vlan di MAIN_SW namun kenggotaan portnya masih kosong

- Memberikan access pada interface fa0/1 ke vlan 10 dan fa0/1 ke vlan 30 pada MAIN_SW
<img src="../assets/prak5-9.png">

- Memberikan mode trunk pada interface fa0/3 yang berhubungan langsung ke MAIN_ROUTER
<img src="../assets/prak5-10.png">

- Mengecheck keanggotaan port vlan 10 dan vlan 30
<img src="../assets/prak5-11.png">
<br>
Terlihat vlan 10 memiliki port fa0/1 sebagai anggotannya, dan vlan 30 memiliki anggota port fa0/2

3. Test Ping pada PC-1 ke PC-2
<img src="../assets/prak5-12.png">



