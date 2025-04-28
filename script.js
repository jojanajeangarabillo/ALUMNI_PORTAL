function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('collapsed');
  const toggleBtn = document.querySelector('.toggle-btn');
  toggleBtn.innerHTML = sidebar.classList.contains('collapsed') ? '&#x25B6;' : '&#x25C0;';
}

function openModal() {
  document.getElementById('topicModal').classList.remove('hidden');
}

function closeModal() {
  document.getElementById('topicModal').classList.add('hidden');
}

// Define the current user (you can replace "Marian" with dynamic data if needed)
const currentUser = "Marian";

// Add Comment
function addComment() {
  const newCommentInput = document.getElementById('newComment');
  const commentsList = document.getElementById('commentsList');
  const commentText = newCommentInput.value.trim();

  if (commentText !== '') {
    const commentDiv = document.createElement('div');
    commentDiv.className = 'bg-white p-3 rounded-lg shadow text-gray-700';

    // Use the current user name (e.g., "Marian") for the comment
    commentDiv.innerHTML = `<strong>${currentUser}</strong>: ${commentText}`;

    commentsList.appendChild(commentDiv);
    
    // Clear the comment input
    newCommentInput.value = '';
  }
}


// Allow "Enter" Key to submit
document.addEventListener('DOMContentLoaded', function() {
  const newCommentInput = document.getElementById('newComment');
  newCommentInput.addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
      event.preventDefault();
      addComment();
    }
  });
});
