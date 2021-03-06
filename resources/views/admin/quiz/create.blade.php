<x-app-layout>

<x-slot name="header">quiz oluştur</x-slot>






<div class="card">
       <div class="card-body">

    <form method="POST" action="{{route('quizzers.store')}}">
        @csrf

    <div class="form-group">  
        <label>  Quiz Başlığı    </label>
        <input type="text" name="title" class="form-control" value="{{old('title')}}" >   
    </div>  



    <div class="form-group">  
        <label>  Quiz açıklama   </label>
        <textarea name="description "  class="form-control" rows="4">{{old('description')}}</textarea>

    </div>  



    <div class="form-group">  

    <input id="isFinished" checked type="checkbox"  >   
        <label> Bitiş Tarihi  Olcak mı ? </label>
        
    </div>  
    





    <div id="finishedInput"  style="display: none" class="form-group">  
        <label> Bitiş Tarihi  </label>
        <input type="datetime-local" name="finished_at" value="{{old('finished_at')}}" class="form-control" >   
    </div>  
    



    <div class="form-group">  
       
        <button type="submit" class="btn btn-success btn-sm btn-block">Quiz oluştur </button>  
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