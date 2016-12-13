<template>
    <div class="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" name="berat_badan" value="" class="form-control" placeholder="Berat Badan">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi_badan" value="" class="form-control" placeholder="Tinggi Badan">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="golongan_darah">Golongan Darah</label>
                    <select class="form-control" name="golongan_darah">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="warna_kulit">Warna Kulit</label>
                    <select class="form-control" name="warna_kulit">
                        <option value="Putih">Putih</option>
                        <option value="Kuning Langsat">Kuning Langsat</option>
                        <option value="Sawo Matang">Sawo Matang</option>
                        <option value="Coklat">Coklat</option>
                        <option value="Hitam">Hitam</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Riwayat Penyakit</label>
            <textarea name="alamat" value="" class="form-control" placeholder="Riwayat Penyakit" rows="3"></textarea>
        </div>
    </div>
</template>
