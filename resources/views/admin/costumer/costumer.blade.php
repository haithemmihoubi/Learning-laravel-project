@extends('admin.dashboard')
@section('content')
    <h1>costumers</h1>
    <table class="table">
        <thead class="bg-dark">
        <tr>

            <th scope="col">id</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">city</th>
            <th scope="col">country</th>
            <th scope="col">email</th>
            <th scope="col">actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($customer as $item)
            <tr>

                <td>{{ $item->id }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->city }}</td>
                <td>{{ $item->country }}</td>
                <td>{{ $item->email }}</td>
                <td><a class="btn btn-outline-primary"
                       href="{{ route('customers.show',['customer' => $item->id]) }}">show</a>
                    <a class="btn btn-outline-success">edit</a>
                    <a class="btn btn-outline-danger">delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mx-auto" >
      {!! $customer->links() !!}
    </div>


@endsection
