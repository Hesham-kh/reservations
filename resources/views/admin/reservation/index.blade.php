@extends('admin.admin')
@section('content')
    <div class="py-5">
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">اسم الزيون</th>
                    <th scope="col">عنوان الزبون</th>
                    <th scope="col">رقم الزبون</th>
                    <th scope="col"> اسم المنتج المحجوز</th>
                    <th scope="col"> سعر المنتج المحجوز </th>
                    <th scope="col"> صوره المنتج</th>
                    <th scope="col">حاله الاستلام</th>
                    <th scope="col"> حذف الحجز</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$reservation->name}}</td>
                        <td>{{$reservation->address}}</td>
                        <td>{{$reservation->phone}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->newPrice}}</td>
                        <td><img src="/images/products/{{$reservations->product->product_img}}" width="200" alt=""></td>
                        <td>  <a href="{{url('admin/products/'.$reservation->id.'')}}" class="btn btn-info">تاكيد الاستلام</a>                            
                        </td>
                        <td>

                            <form action="{{ route('reservation.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">حذف</button>
                            </form>


                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
