<x-app-layout>
    <x-slot name="header">{{$quiz->title}} quizine ait sorular</x-slot>

   <div class="card">
       <div class="card-body">


       <h5  class="card-title">

       <a href="{{route('sorular.create',$quiz->id)}}" class="btn btn-sm btn-primary"> <i class="fa fa-plus" > </i> soru oluştur</a>
       </h5>

       <table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">soru</th>
      <th scope="col">1.cevap</th>
      <th scope="col">2.cevap</th>
      <th scope="col">3.cevap</th>
      <th scope="col">4.cevap</th>
      <th scope="col">doğru</th>
      <th scope="col">işlemler</th>
    </tr>



    
    @foreach($quiz->sorular as sorular)
    <tr>
      <td >{{$sorular->sorular}}</td>
      <td >{{$sorular->image}}</td>
      <td >{{$sorular->answer1}}</td>
      <td >{{$sorular->sanswer2}}</td>
      <td >{{$sorular->answer3}}</td>
      <td >{{$sorular->answer4}}</td>
      <td >{{$sorular->correct_answer}}</td>
      <td>

        <a href="{{route('sorular.index',$sorular->id)}}" class="btn btn-sm btn-warning">
          <i class="fa fa-question"></i> 
        </a>
        <a href="{{route('quizzers.edit',$sorular->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>
        <a href="{{route('quizzers.destroy',$sorular->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i> </a>

      </td>
    </tr>
 @endforeach
  </thead>
  <tbody>

    

            </tbody>
        </table>
   </div>
</div>
</x-app-layout>
