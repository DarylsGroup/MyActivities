function createHollowDiamond(length) {
  if (length % 2 === 0) {
    length++; // Ensure odd length for the diamond
  }

  const middle = Math.floor(length / 2);

  for (let i = 0; i < length; i++) {
    let row = '';

    for (let j = 0; j < length; j++) {
      if (i <= middle) {
        if (j === middle - i || j === middle + i) {
          row += '*';
        } else {
          row += ' ';
        }
      } else {
        if (j === i - middle || j === length - 1 - (i - middle)) {
          row += '*';
        } else {
          row += ' ';
        }
      }
    }

    console.log(row);
  }
}

createHollowDiamond(10);
