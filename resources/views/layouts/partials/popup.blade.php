<div class="container mt-4" style="display: flex; justify-content: center; align-item:center;">
    @if (session('success'))
    <script>
    alert("{{ session('success') }}");
    </script>
    @endif

    @if ($errors->any())
            <script>
            @foreach ($errors->all() as $error)
            alert("{{ $error }}");
            @endforeach
            </script>
        </ul>
    </div>
    @endif
</div>
