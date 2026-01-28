/**
 * Fungsi untuk mengisi dropdown layanan secara otomatis 
 * ketika tombol "Pilih Layanan" diklik.
 */
function isiLayanan(namaLayanan) {
    // 1. Ambil elemen dropdown berdasarkan ID
    const selectElement = document.getElementById('select-layanan');
    
    // 2. Jika elemen ditemukan, ubah nilainya
    if (selectElement) {
        selectElement.value = namaLayanan;
        
        // 3. Memberikan efek visual (highlight) agar user tahu form telah berubah
        const formBox = document.querySelector('#form-konsultasi div');
        if (formBox) {
            formBox.classList.add('ring-2', 'ring-indigo-500', 'duration-500');
            
            // Hapus efek highlight setelah 1.5 detik
            setTimeout(() => {
                formBox.classList.remove('ring-2', 'ring-indigo-500');
            }, 1500);
        }
    } else {
        console.error("Elemen select-layanan tidak ditemukan!");
    }
}