<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan transaksi dari : {{$datas->id}} - {{$datas->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach($dataProduk as $dp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="datas:img/svg+xml;base64,">
                    <div class="caption">
                        <p text-align="center"><b>{{$dp->generic_name}}</b></p>
                        <hr/>
                        <p>Kategori : {{$dp->categories->name}}</p>w
                        <p>Harga : Rp. {{$dp->price}} ,- </p>
                        <p>Jumlah Beli : {{$dp->medicine_transaction->quantity}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class = "modal fade" id="detail{{$datas->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"> Tampilan Transaksi dari {{$li->$transaction_date}}</h4>
                        </div>

                <div class="modal-body">
                 <div class='row'>
                    @foreach($datas as $li)
                        <div class='col-md-4' style='border:1px solid #eee;text-align:center'>
                        <img src="{{ asset('img/'.$li->id.'.jpg') }}" height='200px' /></a> <br>
                        {{ $li->}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div> 
                 </div>
                </div>