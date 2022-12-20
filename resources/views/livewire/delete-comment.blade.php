<x-modal-confirm 
    livewire-eventToOpenModal="deleteCommentWasSet"
    eventToCloseModal="commentWasDeleted"
    modalTitle="Delete Comment"
    modalDescription="Are you sure you want to delete this comment? This action cannot be undone."
    modalConfirmButtonText="Delete"
    wireClick="deleteComment"
/>