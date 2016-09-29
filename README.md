# Jokey Project

This project exists for the sole purpose of testing and documenting things like
deploying and backing up PHP applications.  It consists of some near-minimum
necessary stuff to actually test such tasks.

## Development

I created a VM using Vagrant and the [Scotch Box](https://box.scotch.io/)
virtual machine image for 64b Ubuntu.  I then used my finely tuned, highly
customized software development setup on my laptop (the host system for the VM,
but not within the VM) to actually write this trivial code.  As needed, I
committed and pushed to GitHub, then pulled from GitHub to `/vagrant/public` in
the VM instance, allowing me to see what all this does in the browser on my
laptop.  I probably should have test-driven this, but when I started this I was
not particularly well-versed in the current tooling and techniques for PHP TDD.
I admit to feeling deeply uncomfortable with a lack of tests during
development, though.
