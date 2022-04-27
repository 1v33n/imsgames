function visualizePassword(event) {
    const input = event.currentTarget;
    if (input.type === 'password') {
        input.type = 'text';
    } else if (input.type === 'text') {
        input.type = 'password';
    }
}