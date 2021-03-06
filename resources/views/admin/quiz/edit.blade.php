<x-app-layout>

<x-slot name="header">quiz güncelle</x-slot>






<div class="card">
       <div class="card-body">

    <form method="POST" action="{{route('quizzers.update',$quiz->id)}}">
        @method('PUT')
        @csrf

    <div class="form-group">  
        <label>  Quiz Başlığı    </label>
        <input type="text" name="title" class="form-control" value="{{$quiz->title}}" >   
    </div>  



    <div class="form-group">  
        <label>  Quiz açıklama   </label>
        <textarea name="description "  class="form-control" rows="4">{{$quiz->description}}</textarea>

    </div>  



    <div class="form-group">  

    <input id="isFinished" checked type="checkbox"  >   
        <label> Bitiş Tarihi  Olcak mı ? </label>
        
    </div>  
    





    <div id="finishedInput"  style="display: none" class="form-group">  
        <label> Bitiş Tarihi  </label>
        <input type="datetime-local" name="finished_at" value="{{ date('Y-m-d\TH:i',strtotime($quiz->finished_at))}}" class="form-control" >   
    </div>  
    



    <div class="form-group">  
       
        <button type="submit" class="btn btn-success btn-sm btn-block">Quiz güncelle </button>  
    </div>  
        


</form>
    </div>
</div>



<x-slot name="js">

    <script> 

  $('#isFinished').change(function(){
  

    if($('#isFinished').is(':checked')){

        $('#finishedInput').show();

    }else{

        $('#finishedInput').hide();

    }


  })

    </script>

</x-slot>

</x-app-layout>