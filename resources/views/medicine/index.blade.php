
@extends('layouts.conquer')

@section('listmedicine')   
<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
				<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">DISCLAIMER</h4>
							</div>
							<div class="modal-body">
							Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
							</div>
							<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>  
 <table class="table table-bordered">
 <thead>
 <tr>
 <th>Name</th>
        <th>Form</th>
        <th>Restriction Formula</th>
        <th>Description</th>
        <th>Faskes tk 1</th>
        <th>Faskes tk 2</th>
        <th>Faskes tk 3</th>
     </tr>
 </thead>
 <tbody>
       @foreach($datas as $li)
     <tr>
     <td>{{$li->generic_name}}</td>
        <td>{{$li->form}}</td>
        <td>{{$li->restriction_formula}}</td>
        <td>{{$li->description}}</td>
        <td>{{$li->faskes_tk1}}</td>
        <td>{{$li->faskes_tk2}}</td>
        <td>{{$li->faskes_tk3}}</td>
        <td>{{$li->image}}</td>
        <td>{{$li->price}}</td>
        <td>
          <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
              data-toggle="modal">{{ $li->generic_name }}</a>  
          <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">{{$li->generic_name}}</h4>
                </div>
                <div class="modal-body">
                        <img src="{{ asset('img/'.$li->image.'.jpg')}}" height='200px' />
                </div>
                <div class="modal-body">
                 <p>{{$li->description}}</p>
              </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
          </div>
          </td>
      </div>
     </tr>
     @endforeach
   </tbody>
 </table>
 <!-- <table>
    @foreach($datas as $li)
      <div>
        <img src="{{asset('img/'.$li->image.'.jpg')}}"/> 
        <br>
      </div>
      <div>
      {{$li->generic_name}} 
      </div>
    @endforeach
  </table> -->
</div>
 @endsection
<!-- <td>@foreach($datas as $li)
          <div>
              <img src="{{asset('img/'.$li->image.'.jpg')}}"/> 
              <br>
          <!-- </div> -->
          <!-- <div>
          {{$li->generic_name}} 
          </div> -->
          <!-- @endforeach</td> --> -->
