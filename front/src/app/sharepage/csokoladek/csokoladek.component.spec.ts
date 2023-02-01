import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CsokoladekComponent } from './csokoladek.component';

describe('CsokoladekComponent', () => {
  let component: CsokoladekComponent;
  let fixture: ComponentFixture<CsokoladekComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CsokoladekComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CsokoladekComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
