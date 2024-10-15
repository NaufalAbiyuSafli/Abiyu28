<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 class="text-center mb-4">Pizza reservations</h1>

                <!-- Alert untuk Success Message -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form Create Post -->
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5>New reservations</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Nama Pemesan</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Masukan Nama..." required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Deskripsi Pesanan</label>
                                <textarea name="content" id="content" class="form-control" rows="4" placeholder="Masukan Deskripsi..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Pesan</button>
                        </form>
                    </div>
                </div>

                <!-- List of Posts -->
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h5>List of Reservations</h5>
                    </div>
                    <div class="card-body">
                        @if($posts->isEmpty())
                            <p class="text-center">No reservations available.</p>
                        @else
                            <ul class="list-group">
                                @foreach($posts as $post)
                                    <li class="list-group-item">
                                        <h6 class="fw-bold">{{ $post->title }}</h6>
                                        <p>{{ $post->content }}</p>
                                        <small class="text-muted">Created at: {{ $post->created_at->format('d M Y, H:i') }}</small>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
