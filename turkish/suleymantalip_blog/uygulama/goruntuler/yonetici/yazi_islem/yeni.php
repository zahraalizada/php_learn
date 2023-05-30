<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Blog YAzilarim</h4>
            <p class="card-description"> Yeni yazi ekle </p>
            <form id="blog_yeni_yazi">
                <div class="form-group">
                    <label for="exampleInputName1">Baslik</label>
                    <input type="text" class="form-control" name="baslik" placeholder="Blogun basligini girin">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kisa baslik</label>
                    <input type="text" class="form-control" name="k_baslik" placeholder="Blogun kisa basligini girin">
                </div>
                <div class="form-group">
                    <label>Baslik resim</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <input type="file" multiple name="files[]" class="file-upload-default dosyaci">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Baslik Resim">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Resim sec</button>
                          </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select class="form-control form-control-lg" name="kategori">
                        <option>Secim yapin</option>
                        <option>Gunluk</option>
                        <option>Akademik</option>
                        <option>Bilim</option>
                        <option>Sanat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Durum</label>
                    <select class="form-control form-control-lg" name="durum">
                        <option>Secim yapin</option>
                        <option>Yayinda</option>
                        <option>Incelemede</option>
                        <option>Iptal</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea1">Blogun icerigi</label>
                    <textarea class="form-control" name="icerik" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Ekle</button>
            </form>
        </div>
    </div>
</div>