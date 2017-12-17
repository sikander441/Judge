#include<iostream>
using namespace std;
int main()
{
   int x,n;unsigned long long int sum=0;
  cin>>x;
  for(int i=0;i<n;i++)
  {
     cin>>x;
     sum+=x;
  }
  cout<<sum<<endl;
   return 0;
}