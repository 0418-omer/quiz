<x-app-layout>
    <x-slot name="header">Quizler</x-slot>

   <div class="card">
       <div class="card-body">


       <h5  class="card-title">

       <a href="{{route('quizzers.create')}}" class="btn btn-sm btn-primary"> <i class="fa fa-plus" > </i> Quiz oluştur</a>
       </h5>

       <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Quiz</th>
      <th scope="col">Durum</th>
      <th scope="col">Bitiş Tarihi</th>
      <th scope="col">İşlemler</th>
    </tr>
  </thead>
  <tbody>

      @foreach($quizzers as $quiz)
    <tr>
      <td >{{$quiz->title}}</td>
      <td>{{$quiz->status}}</td>
      <td>{{$quiz->finiseh_at}}</td>
      <td>

        <a href="{{route('sorular.inde',$quiz->id)}}" class="btn btn-sm btn-warning">
          <i class="fa fa-question"></i> 
        </a>
        <a href="{{route('quizzers.edit',$quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> </a>
        <a href="{{route('quizzers.destroy',$quiz->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-edit"></i> </a>

      </td>
    </tr>
 @endforeach

  </tbody>
</table>

{{$quizzers->links()}}



   </div>
</div>
</x-app-layout>
