@extends('layouts.default')
@section('content')
        <h1>CBAM Check</h1>
        <p>Insert your Productdata</p>
        <div>
            <form method="POST" action="/search" @class(['search-form','flex', 'flex-col', 'gap-4'])>
                @csrf
                <div @class(['form-group','flex','gap-4'])>
                <label for="cn_code" class="min-w-3xs">CN Code of your Goods:</label>
                <input type="text" id="cn_code" name="cn_code" class="search-input border rounded-sm" required>
                </div>
                <div class="form-group flex gap-4">
                <label for="country" class="min-w-3xs">Country of Origin:</label>
                <select name="country" id="country" class="search-input border rounded-sm" required>
                    <option value="">-- Choose Country --</option>
                    @foreach ($countries as $country)
                        <option value="{{$country['id']}}">{{ $country['country_name'] }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group flex gap-4">
                <label for="imported-goods-value" class="min-w-3xs">Value of the Goods:</label>
                <select name="imported-goods-value" id="imported-goods-value" class="search-input border rounded-sm" required>
                    <option value="">-- Please Choose --</option>
                    <option value="0">up to 150 &euro;</option>
                    <option value="1">more than 150 &euro;</option>
                </select>
                </div>
                <div class="form-group flex gap-4">
                <label for="imported-goods-purpose" class="min-w-3xs">Purpose of Import:</label>
                <select name="imported-goods-purpose" id="imported-goods-purpose" class="search-input border rounded-sm" required>
                    <option value="">-- Please Choose --</option>
                    <option value="0">released for free circulation</option>
                    <option value="1">released for free circulation as returned goods (Article 203 UCC applies)</option>
                    <option value="2">none of the above</option>
                </select>
                </div>
                <div class="form-group flex gap-4">
                <button type="submit" @class(['border','rounded-sm','p-16'])>Search</button>
                </div>
            </form>
        </div>
@endsection