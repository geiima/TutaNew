string[] cars = {"Volvo", "BMW", "Ford", "Mazda", "Audi"};

foreach (string i in cars)
{
    System.Console.Write("{0} ", i);
}

System.Console.WriteLine();
int[] numbers = {0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20};

Array.Reverse(numbers);
foreach (int i in numbers)
{
    System.Console.Write("{0} ", i);
}
