//Числа девятке кратные
#include <stdio.h>

int main() {

	int a =1234567;
	int b = 7654321-1234567;
	int c = a;
	int d = 10;
	int i;
    for (i=0; i!=b; i+=9) {
		 c=a+i;
		 printf("%d\n", c);
	}
}
