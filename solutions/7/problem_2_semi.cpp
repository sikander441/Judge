#include<stdio.h>
#include<algorithm>
#include<vector>
#include<set>
#include<stdlib.h>
#include<string.h>
#include<utility>
using namespace std;
typedef long long int ll;
char str[200001];
int main()
{
    int t,len,i,j,x,y;
    scanf("%d",&t);
    while(t--){
        scanf("%s",str);
        len = strlen(str);
        for(i=0;i<len/2;i++){
            j = len - 1 -i;
            if(str[i]!=str[j])    break;
        }
        if(i==len/2){
            if(len%2==1){
                printf("%d\n",len/2);
                continue;
            }
        }
        {
            for(x=i+1,y=j;x<y;x++,y--)    if(str[x]!=str[y])    break;
            if(x>=y)    printf("%d\n",i);
            else{
                for(x=i,y=j-1;x<y;x++,y--)    if(str[x]!=str[y])    break;
                if(x>=y)    printf("%d\n",j);
                else    printf("-1\n");
            }
        }
    }
    return 0;
}