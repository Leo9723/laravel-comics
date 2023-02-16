<div class="main-cont">
   @foreach ($comics as $comic)
      <div class="card">
         <div class="thumb">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
         </div>
         <div class="title">
            {{ $comic['title'] }}
         </div>
      </div>
   @endforeach
</div>

<style lang="scss" scoped>
   .main-cont{
      width: 80%;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
   }
   .card{
      width: calc(100% / 6);
   }
</style>