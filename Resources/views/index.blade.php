@extends('question::layouts.master')

@section('content')
<main role="main">

    <section class="jumbotron">
        <div class="container">
            <h1 class="jumbotron-heading">Question List</h1>
        </div>
    </section>

    <div class="album py-5 bg-light mb-5">
        <div class="container">
          <a href="{{ url('admincp/add-question') }}" class="btn btn-primary btn-lg float-right mb-3">Add New Question</a>
          @include('question::layouts.partials.errors')
          @include('question::layouts.partials.alert')
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">?</th>
                      <th scope="col">Question</th>
                      <th scope="col">Correct Answer</th>
                      <th scope="col">Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($questions as $question)
                      <tr>
                        <th scope="row">{{ $question->id }}</th>
                        <td>{{ $question->questionText }}</td>
                        <td>
                          @if($question->correctAnswer == 1)
                            {{ $question->answerA }}
                          @elseif($question->correctAnswer == 2)
                            {{ $question->answerB }}
                          @else
                            {{ $question->answerC }}
                          @endif
                        </td>
                        <td>
                          <a href="{{ url('admincp/add-question/delete', $question->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                          <a href="{{ url('admincp/add-question/edit', $question->id) }}" class="btn btn-success btn-sm">Update</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>

                </table>
                <nav aria-label="navigation">{{ $questions->links() }}</nav>
        </div>
    </div>

</main>
@stop
