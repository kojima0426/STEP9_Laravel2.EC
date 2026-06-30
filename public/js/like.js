document.addEventListener('DOMContentLoaded', function () {
    const likeBtn = document.getElementById('like-btn');

    if (likeBtn) {
      likeBtn.addEventListener('click', function () {
            const productId = this.getAttribute('data-product-id');
            const heartIcon = this.querySelector('i');

            const isLiked = this.style.color === 'red' || heartIcon.style.color === 'red';
            const method = isLiked ? 'DELETE' : 'POST';
            const url = `/products/${productId}/like`;

            fetch(url, {
                method: method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
    return response.json();
})
                .then(data => {
                    document.getElementById('like-count').textContent = data.likes_count;

                    heartIcon.style.color = method === 'POST' ? 'red' : 'black';
                });
        });
    }
});
