<script type="text/javascript" src="<?php echo base_url();?>/ckeditor/ckeditor.js"></script>

<form method="post" style="margin-bottom: 0px !important;" class="form-horizontal">
    <div class="form-group" style="margin-top: 80px">
        <label class="col-sm-3 control-label">Sınav ismi</label>
        <div class="col-sm-6">
            <input type="text" name="sinav_adi" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Sınav Tarihi</label>
        <div class="col-sm-6">
            <div class="input-group date datetime col-md-5 col-xs-7" data-start-view="1" data-date="2015-04-30T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                <input class="form-control" name="uyg_tarih" size="16" type="text" value="" />
                <span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Sınav Türü</label>
        <div class="col-sm-3">
            <select class="form-control" name="sinav_turu">
                <option value="none" selected="selected">Ehliyet sınav türünü seçiniz</option>
                <option value="motor">Motor Sınavı</option>
                <option value="trafik">Trafik Sınavı</option>
                <option value="ilkyardım">Sağlık ve İlk Yardım Sınavı</option>
            </select>
        </div>

    </div>

