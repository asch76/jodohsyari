<template>
    <div class="">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" v-model="nama_lengkap" name="nama_lengkap" value="" class="form-control" placeholder="Nama Lengkap" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text"v-model="nama_panggilan" name="nama_panggilan" value="" class="form-control" placeholder="Nama Panggilan" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="jenis_identitas">Jenis Identitas</label>
                    <input type="text" v-model="jenis_identitas" name="jenis_identitas" value="" class="form-control" placeholder="Jenis Identitas" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="nomor_identitas">Nomor Identitas</label>
                    <input type="text" v-model="nomor_identitas" name="nomor_identitas" value="" class="form-control" placeholder="Nomor Identitas" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" v-model="tempat_lahir" name="tempat_lahir" value="" class="form-control" placeholder="Tempat Lahir" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" v-model="tanggal_lahir" name="tanggal_lahir" value="" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="negara_asal">Negara Asal</label>
                    <input type="text" v-model="negara_asal" name="negara_asal" value="" class="form-control" placeholder="Negara Asal" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="suku">Suku</label>
                    <input type="text" v-model="suku" name="suku" value="" class="form-control" placeholder="Suku" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pendidikan_terakhir">Pendidikan Terkahir</label>
                    <input type="text" v-model="pendidikan_terakhir" name="pendidikan_terakhir" value="" class="form-control" placeholder="Pendidikan Terkahir" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" v-model="pekerjaan" name="pekerjaan" value="" class="form-control" placeholder="Pekerjaan" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="status_pernikahan">Status Pernikahan</label>
                    <select class="form-control" name="status_pernikahan" v-model="status_pernikahan">
                        <optgroup label="Laki - Laki">
                            <option value="Perjaka">Perjaka</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Duda">Duda</option>
                        </optgroup>
                        <optgroup label="Perempuan">
                            <option value="Gadis">Gadis</option>
                            <option value="Janda">Janda</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jumlah_anak">Jumlah Anak</label>
                    <input type="number" v-model="jumlah_anak" name="jumlah_anak" value="" class="form-control" placeholder="Jumlah Anak">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                nama_lengkap : 'Bagas Udi Sahsangka',
                nama_panggilan : '',
                tempat_lahir: '',
                tanggal_lahir: '',
                jenis_identitas: 'KTP',
                nomor_identitas: '',
                pendidikan_terkahir: '',
                pekerjaan: '',
                negara_asal: 'Indonesia',
                suku: '',
                status_pernikahan: '',
                jumlah_anak: 0,
            }
        },

        methods: {

        },

        mounted() {
            // console.log('Component biodata ready.')
        }
    }
</script>
