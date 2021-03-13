PrimeFactors.prototype.of = function (n) {
    var result = [];
    for (var divisor = 2; divisor <= n; ++divisor) {
        for (; 0 === n % divisor; n /= divisor) {
            result.push(divisor);
        }
    }
    return result;
};

module.exports = new PrimeFactors();
