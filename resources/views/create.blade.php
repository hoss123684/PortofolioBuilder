        <form action="{{route('subdomain.store')}}" method="post">
            @csrf
            <label for="">Subdomain</label>
            <input type="text" name="subdomain" id="">
            <button type="submit">Save</button>
        </form>
    </div>