<div class="rating">
    <input type="radio" name="rating-star" class="rating__control" id="rc1">
    <input type="radio" name="rating-star" class="rating__control" id="rc2">
    <input type="radio" name="rating-star" class="rating__control" id="rc3" checked>
    <input type="radio" name="rating-star" class="rating__control" id="rc4">
    <input type="radio" name="rating-star" class="rating__control" id="rc5">
    <label for="rc1" class="rating__item">
        <svg class="rating__star">
            <use xlink:href="#star"></use>
        </svg>
        <span class="rating__label">1</span>
    </label>
    <label for="rc2" class="rating__item">
        <svg class="rating__star">
            <use xlink:href="#star"></use>
        </svg>
        <span class="rating__label">2</span>
    </label>
    <label for="rc3" class="rating__item">
        <svg class="rating__star">
            <use xlink:href="#star"></use>
        </svg>
        <span class="rating__label">3</span>
    </label>
    <label for="rc4" class="rating__item">
        <svg class="rating__star">
            <use xlink:href="#star"></use>
        </svg>
        <span class="rating__label">4</span>
    </label>
    <label for="rc5" class="rating__item">
        <svg class="rating__star">
            <use xlink:href="#star"></use>
        </svg>
        <span class="rating__label">5</span>
    </label>
    <?php $count = count($rating); ?>
    @if($count == 0)
    <span style="color: #333;">( {{ trans_choice('messages.rating', 0) }} )</span>
    @else
    <span style="color: #333;">( {{ trans_choice('messages.rating',  $count,['score' => $rating->sum('point') / $count, 'result' => $count]) }} )</span>
    @endif
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="star" viewBox="0 0 26 28">
        <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"/>
    </symbol>
</svg>
