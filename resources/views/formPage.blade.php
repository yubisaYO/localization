<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1>{{ __('form.title') }}</h1>
        <form action="/proses-form/" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">{{ __('form.field.nim') }}</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" name="nim" @err>
                @error('nim')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
                
            <div class="mb-3">
                <label for="" class="form-label @error('nama') is-invalid @enderror">{{ __('form.field.name') }}</label>
                <input type="text" class="form-control" value="{{ old('nama') }}" name="nama">
                @error('nama')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="" class="form-label">{{ __('form.field.email') }}</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                @error('email')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>


             <div class="mb-3">
                <label for="" class="form-label">{{ __('form.field.gender.title') }}</label>
                <div>
                    <input type="radio" name="jenis_kelamin" {{ old('jenis_kelamin') == 'male' ? 'checked' : '' }}>
                    <label for="">{{ __('form.field.gender.male') }}</label>

                    <input type="radio" name="jenis_kelamin" value="female" {{ old('jenis_kelamin') == 'female' ? 'checked' : '' }}>
                    <label for="">{{ __('form.field.gender.female') }}</label>
                </div>
                @error('jenis_kelamin')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>



            <div class="mb-3">
                <label for="" class="form-label">{{ __('form.field.major.title') }}</label>

                <div>
                    <select id="" class="form-select" name="jurusan">
                        <option value="{{ __('form.field.major.ch') }}">{{ __('form.field.major.ch') }}</option>
                        <option value="{{ __('form.field.major.cs') }}">{{ __('form.field.major.cs') }}</option>
                        <option value="{{ __('form.field.major.is') }}">{{ __('form.field.major.is') }}</option>
                        <option value="{{ __('form.field.major.ai') }}">{{ __('form.field.major.ai') }}</option>
                    </select>
                </div>
                
                @error('jurusan')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="" class="form-label">{{ __('form.field.address') }}</label>
                <textarea name="alamat" id="" cols="30" rows="10" class="form-control @error('alamat') is-invalid @enderror" value="">{{ old('alamat') }}</textarea>
                @error('alamat')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>