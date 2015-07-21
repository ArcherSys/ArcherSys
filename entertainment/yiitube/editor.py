with open(raw_input("filename:"), "w") as writer:
    writer.write(raw_input("Type what you want:"))
    if not writer.closed:
        writer.close()
    print writer.closed