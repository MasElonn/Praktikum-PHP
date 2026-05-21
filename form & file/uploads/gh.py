def fun_00102150(input_str, target_data, length):
    """
    Python translation of the C validation function.

    :param input_str: The string to check (param_1)
    :param target_data: A list or bytes object containing the comparison values (param_2)
    :param length: The expected length (param_3)
    """

    # DAT_00103806: These are the 4 bytes at the memory address in the binary.
    # Replace these with the actual values found in your decompiler.
    DAT_00103806 = [0x3A,0x7c,0x11,0x11]

    if len(input_str) != length:
        return 0

    bVar2 = 0
    bVar4 = 0x3a

    # The C loop uses 1-based indexing (lVar3 = 1) and accesses [lVar3 - 1]
    for i in range(length):
        char_val = ord(input_str[i])

        # This mimics the C expression: (byte)(char >> 3 | char << 5)
        # It is a circular right shift by 3 (or left shift by 5)
        rotated = ((char_val >> 3) | (char_val << 5)) & 0xFF

        # XOR with the running state variables
        check_val = (rotated ^ bVar2 ^ bVar4) & 0xFF

        # Compare against the target data (param_2)
        if check_val != target_data[i]:
            return 0

        # Update running variables
        bVar2 = (bVar2 + 0x13) & 0xFF

        # Check if we've reached the return condition
        # (ulong)(param_3 != 7) + 8 logic:
        # If length is 7: loop ends at index 6 (7 iterations)
        # If length is 8: loop ends at index 7 (8 iterations)
        target_limit = (1 if length != 7 else 0) + 8
        if (i + 2) == target_limit:
            return 1

        # Update bVar4 from the data table using index i+1
        # equivalent to (&DAT_00103806)[(uint)lVar3 & 3]
        bVar4 = DAT_00103806[(i + 1) & 3]

    return 0

# Example usage:
# result = fun_00102150("password", [0xde, 0xad, 0xbe, 0xef, ...], 8)
result = fun_00102150("ABCDFGH",[0x12,0x81,0xb1,0x01,0xda,0xee,0x47],7)
print(result)
