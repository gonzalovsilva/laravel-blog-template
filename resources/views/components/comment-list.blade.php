<div class="col-lg-12">
    <div class="sidebar-item comments">
        <div class="sidebar-heading">
            <h2>4 comments</h2>
        </div>
        <div class="content">
            <ul>
                @foreach ($comments as $comment)
                        <li>
                            <div class="author-thumb">
                                <img src="/images/users/{{ $comment->img }}" alt="">
                            </div>
                            <div class="right-content">
                                <h4>{{ $comment->user()->get()[0]->name }}<span>{{ $comment->formattedUpdatedAt }}</span></h4>
                                <p>{{ $comment->message }}</p>
                            </div>
                        </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
